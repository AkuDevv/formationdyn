<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container search-table">
    <div class="search-box">
        <div class="row">
            <div class="col-md-3">
                <h5>Filtrer/Rechercher</h5>
            </div>
            <div class="col-md-9">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Rechercher tous les champs">
                <script>
                    $(document).ready(function() {
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="search-list ">
        <h3>Candidats</h3>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom & Prénom</th>
                    <th>Email</th>
                    <th>Formation Choisie</th>
                    <th>Entreprise</th>
                    <th>Tel</th>
                    <th>Fonction</th>
                    <th>Secteur</th>
                    <th>Ville</th>
                    <th>Paiement</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'formationsite';
                $formations = [];

                $connection = mysqli_connect($host, $username, $password, $dbname);
                if ($connection == false) {
                    die('Erreur de connexion!');
                } else {
                        $select_ = "SELECT nom from formations";
                        $result_ = mysqli_query($connection, $select_);
                        if (mysqli_num_rows($result_) > 0) {
                          while ($row = mysqli_fetch_array($result_)) {
                            array_push($formations,$row[0]);
                          }
                        } else {
                          echo "<p>Erreur!</p>";
                        }
                    $select = "SELECT * from users";
                    $result = mysqli_query($connection, $select);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo"
                            <tr>
                                <td>".$row[0]."</td>
                                <td>".$row[1]."</td>
                                <td>".$row[2]."</td>
                                <td>".$formations[$row[3]-1]."</td>
                                <td>".$row[4]."</td>
                                <td>".$row[5]."</td>
                                <td>".$row[6]."</td>
                                <td>".$row[7]."</td>
                                <td>".$row[8]."</td>
                                <td>".$row[9]."</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<p>Erreur!</p>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>