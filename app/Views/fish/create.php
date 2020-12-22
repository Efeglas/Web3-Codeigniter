<div class="content">

    <h2>Hal hozzáadása</h2>

    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/fish/create" method="post" class="edit">
        <?= csrf_field() ?>
        <div class="form-grp">

            <label for="name">Név</label>
            <input type="input" name="name" /><br />
        </div>
        <div class="form-grp">

            <label for="price">Egységár</label>
            <input type="input" name="price" /><br />
        </div>

        <button type="submit" name="submit" class="submitBtn">Hozzáadás</button>

    </form>
</div>