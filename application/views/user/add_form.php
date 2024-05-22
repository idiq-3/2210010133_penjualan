<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user')?>"></a></li>
            <li class="breadcrumb-item active"><?php echo $title?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
            <form action="<?php echo site_url('user/save')?>" method="post">
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">USERNAME</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">FULL NAME</label>
                    <input type="text" class="form-control" id="fullname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">PHONE</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">ALAMAT</label>
                    <input type="TEXT" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">PASSWORD</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">ROLE</label>
                    <select class="form-control" id="ROLE" name="role" required>
                    <option selected>CHOOSE...</option>
                    <option value="PEMILIK">PEMILIK</option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="KASIR">KASIR</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>Save</button>
            </form>
            </div>
        </div>
    </div>
</main>