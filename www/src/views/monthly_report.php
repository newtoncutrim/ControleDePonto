<main class="content">
    <?php

    renderTitle(
        'Relatorio Mensal',
        'Acompanhe seu saldo de horas',
        'icofont-ui-calendar'
    );
    ?>

    <div>
        <form class="mb-4" action="#" method="post">
            <div class="input-group">
                <?php if ($user->is_admin) : ?>
                    <select class="form-control mr-2" placeholder='Selecione o usuario' name="user">
                        <option value="">selecione o usuario</option>
                        <?php
                        foreach ($users as $user) {
                            $selectd = $user->id === $selectdUserId ? 'selected' : '';
                            echo "<option value='{$user->id}'{$selectd}>{$user->name}</option>";
                        }
                        ?>
                    </select>
                <?php endif; ?>
                <select class="form-control " placeholder='Selecione o periodo' name="period">
                    <?php
                    foreach ($periods as $key => $month) {
                        $selectd = $key === $selectdPeriod ? 'selected' : '';
                        echo "<option value='{$key}'{$selectd}>$month</option>";
                    }
                    ?>
                </select>
                <button class="btn btn-primary ml-2">
                    <i class="icofont-search">
                    </i>
                </button>
            </div>
        </form>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saida 1</th>
                <th>Entrada 2</th>
                <th>Saida 2</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php
                foreach ($report as $registry) { ?>
                    <tr>
                        <td><?= formatDateWithLocale($registry->work_date, '%A, %d de %B de %Y') ?></td>
                        <td><?= $registry->time1 ?></td>
                        <td><?= $registry->time2 ?></td>
                        <td><?= $registry->time3 ?></td>
                        <td><?= $registry->time4 ?></td>
                        <td><?= $registry->getBalance() ?></td>
                    </tr>
                <?php } ?>
                <tr class="bg-primary text-white">
                    <td>Horas Trabalhadas</td>
                    <td colspan="3"><?= $sumOfWorkedTime ?></td>
                    <td>Saldo Mensal</td>
                    <td><?= $balance ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</main>