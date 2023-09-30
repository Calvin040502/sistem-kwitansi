<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="pagination" style="display: flex">
        <div class="modal fade" id="changePasswordAdminModal" tabindex="-1"
            aria-labelledby="changePasswordAdminModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordAdminModalLabel">Ganti Password Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('change-password') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="oldPassword"
                                    name="old_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword"
                                    name="new_password" required>
                            </div>
                            <button type="submit" class="btn btn-add">Ubah Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>