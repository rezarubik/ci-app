<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">List of Peoples</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $p) : ?>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">Detail</a>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>