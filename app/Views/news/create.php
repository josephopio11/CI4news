<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="title"
            placeholder="Enter Title">
        <small id="title" class="form-text text-muted">Please enter your title here</small>
    </div>

    <div class="form-group">
        <label for="body">Text</label>
        <textarea class="form-control" name="body" id="body" rows="6"></textarea>
    </div>
    <input type="submit" name="submit" value="Create news item" class="btn btn-success" />

</form>