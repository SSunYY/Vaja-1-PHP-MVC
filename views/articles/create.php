<div class="container">
    <h3 class="mb-3">Objavi novico</h3>
    <form action="/articles/store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" 
                value="<?php echo isset($_POST["novica"]) ? htmlspecialchars($_POST["novica"], ENT_QUOTES, 'UTF-8') : ""; ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Opis</label>
            <input type="text" class="form-control" id="abstract" name="abstract" 
                value="<?php echo isset($_POST["abstract"]) ? htmlspecialchars($_POST["abstract"], ENT_QUOTES, 'UTF-8') : ""; ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Vsebina</label>
            <input type="text" class="form-control" id="text" name="text" 
                value="<?php echo isset($_POST["text"]) ? htmlspecialchars($_POST["text"], ENT_QUOTES, 'UTF-8') : ""; ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="post">Objavi</button>
        </div>
    </form>
</div>