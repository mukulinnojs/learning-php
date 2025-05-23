<?php
session_start();
require "utils/db.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>


    <!-- Edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="edit-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-2">Edit Note</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="utils/update.php" method="post" class="d-flex gap-2 flex-column">
                        <input type="hidden" name="sno-edit" id="sno-edit">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="note-title-edit" name="note-title-edit">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" id="desc-text-edit" name="desc-text-edit"></textarea>
                        </div>
                        <div class="align-self-end">
                            <button type="submit" class="btn btn-success">Confirm Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-2">Delete</h1>
                    <hr>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="utils/delete.php" method="post" class="d-flex gap-2 flex-column">
                        <input type="hidden" name="sno-delete" id="sno-delete">
                        <p>Are you sure you want to delete this note ?</p>

                        <div class="align-self-end">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php

    if (isset($_SESSION['inserted']) && $_SESSION['inserted']) {
        echo "
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Note Added Successfully!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        $_SESSION['inserted'] = false;
    } elseif (isset($_SESSION['updated']) && $_SESSION['updated']) {
        echo "
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Note Updated Successfully!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        $_SESSION['updated'] = false;
    } elseif (isset($_SESSION['deleted']) && $_SESSION['deleted']) {
        echo "
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Note Deleted Successfully!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        $_SESSION['deleted'] = false;
    }
    ?>


    <main class="container mt-5">
        <h1>Add a Note</h1>
        <hr>
        <form action="utils/insert.php" method="post" class="mt-3">
            <div class="form-group mb-3">
                <label for="title" class="form-label"> Note Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Enter a title for your note">
            </div>
            <form action="">
                <div class="form-group mb-3">
                    <label for="desc" class="form-label"> Note Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"
                        placeholder="Enter a description for your note"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Note</button>
            </form>

            <h1 class="mt-5">Your Notes</h1>
            <hr>

            <!-- Display Table -->
            <?php
            $sql = "SELECT *  FROM notes";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (!$row) {
                echo "<label for='title' class='text-danger'>You do not have any notes.</label>";
            } else {
                $result = mysqli_query($conn, $sql);
                $sno = 1;
                echo "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>S No.</th>
                        <th scope='col'>Title</th>
                        <th scope='col'>Description</th>
                        <th scope='col'>Actions</th>
                    </tr>
                </thead>
                <tbody>";


                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                            <tr>
                                <th scope='row'>" . $sno . "</th>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['notedesc'] . "</td>
                                <td>
                                    <button type='button' class='js-edit btn btn-sm btn-success' data-bs-toggle='modal' data-bs-target='#editmodal' data-bs-title='" . $row['title'] . "' data-bs-desc='" . $row['notedesc'] . "' data-bs-sno='" . $row['sno'] . "'>Edit</button>
                                    <button type='button' class='js-delete btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#deletemodal' data-bs-sno='" . $row['sno'] . "'>Delete</button>
                                </td>
                            </tr>                            
                            ";
                    $sno += 1;
                }
            }

            ?>

            </tbody>
            </table>

            <div class="container">

            </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            setupmodal();
        });

        function setupmodal() {
            const editModal = document.getElementById('editmodal');
            const deleteModal = document.getElementById('deletemodal');
            if (editModal && deleteModal) {
                const noteTitle = document.getElementById('note-title-edit');
                const noteDesc = document.getElementById('desc-text-edit');
                const snoedit = document.getElementById('sno-edit');
                const snodlt = document.getElementById('sno-delete');


                editModal.addEventListener('show.bs.modal', event => {
                    // Button that triggered the modal
                    const button = event.relatedTarget
                    // Extract info from data-bs-* attributes
                    const snoval = button.getAttribute('data-bs-sno');
                    const title = button.getAttribute('data-bs-title');
                    const desc = button.getAttribute('data-bs-desc');

                    snoedit.value = snoval;
                    noteTitle.value = title;
                    noteDesc.value = desc;
                })

                deleteModal.addEventListener('show.bs.modal', event => {
                    // Button that triggered the modal
                    const button = event.relatedTarget
                    // Extract info from data-bs-* attributes
                    const snoval = button.getAttribute('data-bs-sno');
                    console.log(snoval);
                    snodlt.value = snoval;
                    console.log(snodlt.value);
                })
            }
        }

    </script>
</body>

</html>