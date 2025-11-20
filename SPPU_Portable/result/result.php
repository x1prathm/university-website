<?php
session_start();
require_once '../login/connect.php';

$rollid  = isset($_POST['rollid']) ? trim($_POST['rollid']) : '';
$classid = isset($_POST['class']) ? trim($_POST['class']) : '';

$data = json_load('results_data.json');
$classes  = isset($data['classes']) ? $data['classes'] : [];
$students = isset($data['students']) ? $data['students'] : [];
$marks    = isset($data['marks']) ? $data['marks'] : [];

$student = null;
foreach ($students as $s) {
    if ($s['rollid'] === $rollid && $s['classid'] === $classid) {
        $student = $s;
        break;
    }
}

$class = null;
foreach ($classes as $c) {
    if ($c['id'] === $classid) {
        $class = $c;
        break;
    }
}

$studentMarks = [];
$total = 0;
foreach ($marks as $m) {
    if ($m['rollid'] === $rollid && $m['classid'] === $classid) {
        $studentMarks[] = $m;
        $total += (int)$m['marks'];
    }
}
$subjectCount = count($studentMarks);
$percentage = $subjectCount > 0 ? round($total / ($subjectCount * 100) * 100, 2) : 0;
$status = $subjectCount > 0 ? ($percentage >= 40 ? 'PASS' : 'FAIL') : 'N/A';
?>
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Result</title>
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/animate-css/animate.min.css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/lobipanel/lobipanel.min.css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/prism/prism.css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/main.css\" media=\"screen\" >
        <script src=\"js/modernizr/modernizr.min.js\"></script>
    </head>
    <body>
        <div class=\"main-wrapper\">
            <div class=\"content-wrapper\">
                <div class=\"content-container\">

                    <div class=\"main-page\">
                        <div class=\"container-fluid\">
                            <div class=\"row page-title-div\">
                                <div class=\"col-md-12\">
                                    <h2 class=\"title\" align=\"center\">SPPU Result</h2>
                                </div>
                            </div>
                        </div>

                        <section class=\"section\" id=\"exampl\">
                            <div class=\"container-fluid\">

                                <div class=\"row\">
                                    <div class=\"col-md-8 col-md-offset-2\">
                                        <div class=\"panel\">
                                            <div class=\"panel-heading\">
                                                <div class=\"panel-title\">
                                                    <h3 align=\"center\">Student Result Details</h3>
                                                    <hr />
                                                </div>
                                            </div>
                                            <div class=\"panel-body p-20\">
<?php if (!$student): ?>
    <h4 style=\"text-align:center; color:red;\">No record found for the given Roll Id and Class.</h4>
<?php else: ?>
    <table class=\"table table-striped table-bordered\">
        <tr>
            <th>Student Name</th>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
        </tr>
        <tr>
            <th>Roll Id</th>
            <td><?php echo htmlspecialchars($student['rollid']); ?></td>
        </tr>
        <tr>
            <th>Class</th>
            <td>
                <?php 
                if ($class) {
                    echo htmlspecialchars($class['name'] . ' - Section ' . $class['section']);
                } else {
                    echo 'N/A';
                }
                ?>
            </td>
        </tr>
    </table>

    <h4 align=\"center\">Marks</h4>
    <table class=\"table table-hover table-bordered\" border=\"1\" width=\"100%\">
        <thead>
            <tr style=\"text-align: center\">
                <th style=\"text-align: center\">#</th>
                <th style=\"text-align: center\">Subject</th>
                <th style=\"text-align: center\">Marks (out of 100)</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $cnt = 1;
        foreach ($studentMarks as $m):
        ?>
            <tr>
                <td style=\"text-align: center\"><?php echo $cnt++; ?></td>
                <td style=\"text-align: center\"><?php echo htmlspecialchars($m['subject']); ?></td>
                <td style=\"text-align: center\"><?php echo htmlspecialchars($m['marks']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h4 align=\"center\">Summary</h4>
    <table class=\"table table-bordered\">
        <tr>
            <th>Total Marks</th>
            <td><?php echo $total; ?></td>
        </tr>
        <tr>
            <th>Percentage</th>
            <td><?php echo $percentage; ?>%</td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo $status; ?></td>
        </tr>
    </table>
<?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 -->
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <script src=\"js/jquery/jquery-2.2.4.min.js\"></script>
        <script src=\"js/bootstrap/bootstrap.min.js\"></script>
        <script src=\"js/prism/prism.js\"></script>
        <script src=\"js/main.js\"></script>
    </body>
</html>
