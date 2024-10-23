<?php
 include("includes/header.php")
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Users dashboard</h1>

                    <div class="row">
                        <div>
                            <button type="button" class="button1" onclick="openAddModal()">
                                <span class="button__text">Add User</span>
                                <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                              </button>
                        </div>
                        <div class="pt-5 pb-3">
                            <h2>Users Table</h2>
    <table class="responsive-table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label="User ID">1</td>
                <td data-label="First Name">John</td>
                <td data-label="Last Name">Doe</td>
                <td data-label="Gender">Male</td>
                <td data-label="Birth Date">1990-01-01</td>
                <td data-label="Address">123 Main St</td>
                <td data-label="Email">john.doe@example.com</td>
                <td data-label="Phone Number">123-456-7890</td>
                <td data-label="Password">a7aaaa</td>
                <td data-label="Role">Admin</td>
                <td data-label="Actions">
                    <div class="action-buttons">
                        <button class="edit-btn" onclick="openEditModal(this)">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td data-label="User ID">2</td>
                <td data-label="First Name">sdad</td>
                <td data-label="Last Name">loui</td>
                <td data-label="Gender">Zalmah</td>
                <td data-label="Birth Date">2001-10-14</td>
                <td data-label="Address">123 Main St</td>
                <td data-label="Email">john.doe@example.com</td>
                <td data-label="Phone Number">123-456-7890</td>
                <td data-label="Password">a7aaaa</td>
                <td data-label="Role">Admin</td>
                <td data-label="Actions">
                    <div class="action-buttons">
                        <button class="edit-btn" onclick="openEditModal(this)">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
                        </div>
                </div>
                <!-- /.container-fluid -->
    <!-- Edit Modal -->
    <div class="modal" id="editModal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeEditModal()">X</button>
            <h3>Edit User</h3>
            <form id="editForm">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName">
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" id="gender" name="gender">
                </div>
                <div class="form-group">
                    <label for="birthDate">Birth Date:</label>
                    <input type="date" id="birthDate" name="birthDate">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <input type="text" id="role" name="role">
                </div>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>

        <!-- Add User Modal -->
        <div class="modal" id="addModal">
            <div class="modal-content">
                <button class="close-btn" onclick="closeAddModal()">X</button>
                <h3>Add New User</h3>
                <form id="addForm">
                    <div class="form-group">
                        <label for="newFirstName">First Name:</label>
                        <input type="text" id="newFirstName" name="newFirstName">
                    </div>
                    <div class="form-group">
                        <label for="newLastName">Last Name:</label>
                        <input type="text" id="newLastName" name="newLastName">
                    </div>
                    <div class="form-group">
                        <label for="newGender">Gender:</label>
                        <input type="text" id="newGender" name="newGender">
                    </div>
                    <div class="form-group">
                        <label for="newBirthDate">Birth Date:</label>
                        <input type="date" id="newBirthDate" name="newBirthDate">
                    </div>
                    <div class="form-group">
                        <label for="newAddress">Address:</label>
                        <input type="text" id="newAddress" name="newAddress">
                    </div>
                    <div class="form-group">
                        <label for="newEmail">Email:</label>
                        <input type="email" id="newEmail" name="newEmail">
                    </div>
                    <div class="form-group">
                        <label for="newPhone">Phone Number:</label>
                        <input type="text" id="newPhone" name="newPhone">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Password:</label>
                        <input type="password" id="newPassword" name="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="newRole">Role:</label>
                        <input type="text" id="newRole" name="newRole">
                    </div>
                    <button class="btn save-btn" type="submit">Save User</button>
                </form>
            </div>
        </div>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/modal.js"></script>

</body>

</html>