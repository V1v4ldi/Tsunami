
    <div class="wrapper">
        <form action="<?=baseurl?>admin/logincek" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input class="btn" type="submit" name="submit" value="Login">
            </div>

        </form>
    </div>
