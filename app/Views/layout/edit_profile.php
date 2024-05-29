<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <form action="<?php echo site_url('polioController/update_profile'); ?>" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <div>
            <label>Username</label>
            <input type="text" name="gambar" value="<?php echo $user['gambar']; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="nama" value="<?php echo $user['nama']; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="umur" value="<?php echo $user['umur']; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="alamat" value="<?php echo $user['alamat']; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>">
        </div>
        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
</body>
</html>
