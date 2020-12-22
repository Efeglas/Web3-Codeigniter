<div class="content">

    <h2>Hal módosítása</h2>
    
    <?= \Config\Services::validation()->listErrors(); ?>
    
    
    
    <form action="/fish/edit/<?= $fish['id']?>" method="post" class="edit">
        <?= csrf_field() ?>
        <div class="form-grp">
            <label for="name">Név</label>
            <input type="input" name="name" value="<?= $fish['name']?>"/><br />
        </div>
    
        <div class="form-grp">
            <label for="price">Egységár</label>
            <input type="input" name="price" value="<?= $fish['price']?>"/><br />
        </div>

        <button type="submit" name="submit" class="submitBtn">Módosítás</button>
    
    </form>
</div>