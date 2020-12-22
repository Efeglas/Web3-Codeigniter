<div class="content">

    <h2>Bevételezés</h2>
    <?php if (! empty($fish) && is_array($fish)) : ?>
        <?= \Config\Services::validation()->listErrors(); ?>
        <form action="/movement/in" method="post" class="movement">
        <table>
                <tr>
                    <th>Név</th>
                    <th>Készlet (db)</th>
                    <th>Egységár</th>
                    <th>Műveletek</th>
                </tr>

                <?php foreach ($fish as $element) : ?>
    
                    <tr>
    
                        <td><?= esc($element['name']); ?></td>
                        <td><?= esc($element['db']); ?></td>
                        <td><?= esc($element['price']); ?></td>
                        <td>
    
                            <label for="db">Darab:</label>
                            <input type="number" name="db-<?= esc($element['id']); ?>">
                        </td>
                </tr>
    
    
    
    
                <?php endforeach; ?>
            </table>
          

            <button type="submit" name="submit" class="submitBtn">Bevételezés</button>
        </form>
    
    <?php else : ?>
    
        <h3>Nincs hal hozzáadva.</h3>
    
       
    
    <?php endif ?>
</div>