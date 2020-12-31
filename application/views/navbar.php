<!doctype html>
<html lang="es">

<body>

    <div class="container-fluid  bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php foreach ($Menu as $item): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $item["url"] ?>"><?= $item["title"] ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</body>

</html>