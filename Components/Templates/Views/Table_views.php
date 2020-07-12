<?php use Core\HTTP; ?>
<div class="container">
        <h3 class="mb-3">
            TOP-500 Most Popular Domains
        </h3>
        <?php $data['top'] = array_slice($data['top'], 0, 500) ?>
        <?php if(count ($data['top']) > 0): ?>
            <table class="table table-sm table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Domain</th>
                        <th scope="col">IP-address</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Status Code</th>
                        <th scope="col">Last checked</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($data['top'] as $domain => $rank): ?>
                        <?php $info = Core\Reader\Http::getCod($domain) ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><a href="//<?= $domain ?>" target="__blank"><?= $domain ?></a></td>
                            <td class="text-success"><?= gethostbyname($domain) ?></td>
                            <td class="text-danger"><?= $rank ?></td>
                            <td class="text-muted"><?= $info['status'] ?></td>
                            <td class="text-muted"><?= $info['time']?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table> 
        <?php else: ?>
            <div class="alert alert-dark" role="alert">
                Sorry, no records found...
            </div>
        <?php endif ?>
    </div>