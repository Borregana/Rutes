
<!-- File: /app/View/Posts/index.ctp -->
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Mail</th>
    </tr>
    <!-- Here is where we loop through our $posts array, printing out post info -->
    <?php foreach ($usuario as $usuarios): ?> <tr>
        <td><?php echo $usuarios['Usuario']['id']; ?></td> <td>
            <?php echo $this->Html->link($usuarios['Usuario']['alias'], array('controller' => 'Usuario', 'action' => 'view', $usuarios['Usuario']['id'])); ?>
        </td>
        <td><?php echo $usuarios['Usuario']['mail']; ?></td> </tr>
    <?php endforeach; ?>
</table>