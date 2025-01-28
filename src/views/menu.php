<div class="container">
    <div class="row gx-5">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?c=posts">Посты</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/?c=contact" role="button"> Контакты </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col">
            <div class="container">
                <?php if ($user): ?>
                    <div class="input-group">
                        <p class="input-group-text">Привет <?= $user ?>,</p><a class="btn btn-primary btn-lg" href="/?c=auth&a=logout">Выход</a>
                    </div>
                <?php else: ?>
                    <form action="/?c=auth&a=login" method="post">
                        <div class="input-group">
                            <span class="input-group-text">Login and Password</span>
                            <input type="text" aria-label="First name" class="form-control" name="login">
                            <input type="password" aria-label="Last name" class="form-control" name="pass">
                            <button class="btn btn-primary" type="submit">Войти</button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>