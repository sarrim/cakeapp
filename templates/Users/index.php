<h1>Users</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->email, ['action' => 'view', $article->email]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>

    
</table>
<a href="users/create" class="btn btn-info"> Add Rec </a>