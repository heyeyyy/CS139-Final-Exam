<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMALS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center fw-bold">ANIMALS</h2>
        <br>
    <?php
        session_start();
        if(isset($_SESSION['message'])){
            ?>
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#info-fill"/></svg>
                <div>
                    <?php echo $_SESSION['message']; ?>
                </div>
            </div>
            <?php

            unset($_SESSION['message']);
        }
    ?>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Type ID
                    </th>
                    <th>
                        color
                    </th>
                    <th>
                        Number of Legs
                    </th>
                    <th>
                        remarks
                    </th>
                </tr>
            </thead>

            <tbody>
            <?php
                    //include our connection
                    include_once('include/database.php');

                    $database = new Connection();
                    $db = $database->open();
                    try{	
                        $sql = 'SELECT * FROM Animals;';
                        $no = 0;
                        foreach ($db->query($sql) as $row) {
                            $no++;
                ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['type_id']; ?></td>
                                <td><?php echo $row['color']; ?></td>
                                <td><?php echo $row['number_legs']; ?></td>
                                <td><?php echo $row['remarks']; ?></td>
                                <td align="right">
                                    <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editAnimal<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteAnimal<?php echo $row['id']; ?>">Delete</a>
                                </td>
                                <?php include('animal/viewdelete.php'); ?>
                                <?php include('animal/viewedit.php'); ?>
                            </tr>
                <?php 
                        }
                    }
                    catch(PDOException $e){
                        echo "There is some problem in connection: " . $e->getMessage();
                    }

                    //close connection
                    $database->close();

                ?>
            </tbody>
        </table>
        </div>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnimal">Add New Animal</a>
    </div>
    
    <br>
    <br>
    <br>

    <div id="footer" class="text-center fw-bold text-dark"  style = "background-color:green;">
        <p>BSCS3A - Gonzales, Jay Ann Marie</p>
    </div>

    <?php include('animal/viewadd.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>