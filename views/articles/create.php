<div class="container">
    <h3 class="mb-3">Objavi novico</h3>
    <form action="post.php" method="post">
        <div class="mb-3">
            <label for="novica" class="form-label">Napiši nekaj</label>
            <input type="text" class="form-control" id="novica" name="novica" 
                value="<?php echo isset($_POST["novica"]) ? htmlspecialchars($_POST["novica"], ENT_QUOTES, 'UTF-8') : ""; ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="post">Objavi</button>
        </div>
    </form>
</div>