<?php include_once(TEMPLATE_ROOT . "/admin/layout/dashboard.php");?>

<div class="control_section">
                <h2>Users</h2>
         
                <div class="control_screen">
         
                <?php foreach ($user as $data): ?>
                                   <div class="card cates" style="height: 5rem;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?=$data->id ."| " .$data->name  ?></li>
                                        </ul>
                                    </div>
                                    <?php endforeach ?>              
                </div>              
            </div>
            
            <!-- Those lines are from dashboard layout -->
            </div>
    </div>
</div>
<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.js"></script>