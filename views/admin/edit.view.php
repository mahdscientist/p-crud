<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">
                <?= $view_bag['heading']; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="post">
            <input type="hidden" name="original-term" value="<?= $model->id; ?>" />
            <div class="form-group">
                <label for="term">Term:</label>
                <input type="text" class="form-control" name="term" id="term" value="<?= $model->term; ?>" />
            </div>
            <div class="form-group">
                <label for="definition">Definition:</label>
                <textarea class="form-control" name="definition" id="definition"><?= $model->definition; ?></textarea>
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</div>