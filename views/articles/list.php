<div class="container">
    <h3>Moje novice</h3>
    <?php if (empty($articles)): ?>
        <p>Nimate še nobene novice.</p>
    <?php else: ?>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <h4><?php echo htmlspecialchars($article->title); ?></h4>
                <p><?php echo nl2br(htmlspecialchars($article->abstract)); ?></p>
                <p>Objavljeno: <?php echo date_format(date_create($article->date), 'd. m. Y \ob H:i:s'); ?></p>

                <!-- Gumbi za akcije -->
                <a href="/articles/show?id=<?php echo $article->id; ?>"><button>Preberi več</button></a>
                <a href="/articles/edit?id=<?php echo $article->id; ?>"><button>Uredi</button></a>

                <!-- Brisanje novice -->
                <form action="/articles/delete" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $article->id; ?>">
                    <button type="submit" onclick="return confirm('Ste prepričani, da želite izbrisati to novico?')">Izbriši</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
