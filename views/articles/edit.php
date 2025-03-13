<div class="container">
    <h3 class="mb-3">Uredi novico</h3>
    <form action="/articles/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $article->id; ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($article->title); ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Opis</label>
            <input type="text" class="form-control" id="abstract" name="abstract" value="<?php echo htmlspecialchars($article->abstract); ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Vsebina</label>
            <textarea class="form-control" id="text" name="text"><?php echo htmlspecialchars($article->text); ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="update">Shrani spremembe</button>
        </div>
    </form>
</div>