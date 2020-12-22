<div class="content">

    <h2>Halak</h2>
    <table>

    <tr>
        <th>Név</th>
        <th>Készlet (db)</th>
        <th>Egységár</th>
        <th>Műveletek</th>
        
    </tr>
        <?php if (! empty($fish) && is_array($fish)) : ?>
        
            <?php foreach ($fish as $element): ?>
                <tr class="">
                    <td><?= esc($element['name']); ?></td>
                    <td><?= esc($element['db']); ?></td>
                    <td><?= esc($element['price']); ?></td>
                    <td class="actions">
                        <a href="/fish/edit/<?= esc($element['id']);?>" class="bg-edit">Módosítás</a>
                        <a href="" id="<?= esc($element['id']);?>" class="deleteBtn">Törlés</a>
                    </td>
                </tr>
        
                
        
            <?php endforeach; ?>
        
        <?php else : ?>
        
            <h3>Nincs hal hozzáadva.</h3>
        
           
        
        <?php endif ?>
    </table>
</div>
