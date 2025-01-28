<div class="container-sm">
    <div class="row">
        <div class="col-sm" class="row gx-5">
            <h2>Посты</h2>
            <div><?= $message ?></div>
            <div>Количество посещений страницы: <?= $count ?></div>
        </div>
        <div class="col-sm">
            <form action=" /?c=posts&a=save" method="post">
                <p>Добавить новый пост:</p>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">наименование</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="title">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">тескт</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="text">
                    <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="card" class="col-sm" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <p class="card-text"><?= $post['text'] ?></p>
                    <a href="/?c=posts&a=show&id=<?= $post['id'] ?>" class="card-link">открыть пост</a>
                    <a href="/?c=posts&a=delete&id=<?= $post['id'] ?>" class="card-link">удалить пост</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>