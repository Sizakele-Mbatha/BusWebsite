<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Grade</label>
                            <select type="int" name="grade" class="form-control">
                                <option value="">-- Choose a grade --</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Morning Pick Up</label>
                            <select type="text" name="pickup" class="form-control">
                                <option value="">-- Choose a pick up --</option>
                                <option value="Bus 1A -- Corner of Panorama and Marabou Road -- 6:22">Bus 1A -- Corner of Panorama and Marabou Road -- 6:22</option>
                                <option value="Bus 1B -- Corner of Kolgansstraat and Skimmerstraat -- 6:30">Bus 1B -- Corner of Kolgansstraat and Skimmerstraat -- 6:30</option>
                                <option value="Bus 2A -- Corner of Reddersburg Street and Mafeking Drive -- 6:25">Bus 2A -- Corner of Reddersburg Street and Mafeking Drive -- 6:25</option>
                                <option value="Bus 2B -- Corner of Theuns van Niekerkstraat and Roosmarynstraat -- 6:35">Bus 2B -- Corner of Theuns van Niekerkstraat and Roosmarynstraat -- 6:35</option>
                                <option value="Bus 3A -- Corner of Jasper Drive and Tieroog Street -- 6:20">Bus 3A -- Corner of Jasper Drive and Tieroog Street -- 6:20</option>
                                <option value="Bus 3A -- Corner of Louise Street and Von Willich Drive -- 6:40">Bus 3A -- Corner of Louise Street and Von Willich Drive -- 6:40</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Afternoon drop off</label>
                            <select type="text" name="dropoff" class="form-control">
                                <option value="">-- Choose a drop off --</option>
                                <option value="Bus 1A -- Corner of Panorama and Marabou Road -- 14:30">Bus 1A -- Corner of Panorama and Marabou Road -- 14:30</option>
                                <option value="Bus 1B -- Corner of Kolgansstraat and Skimmerstraat -- 14:39">Bus 1B -- Corner of Kolgansstraat and Skimmerstraat -- 14:39</option>
                                <option value="Bus 2A -- Corner of Reddersburg Street and Mafeking Drive -- 14:25">Bus 2A -- Corner of Reddersburg Street and Mafeking Drive -- 14:25</option>
                                <option value="Bus 2B -- Corner of Theuns van Niekerkstraat and Roosmarynstraat -- 14:30">Bus 2B -- Corner of Theuns van Niekerkstraat and Roosmarynstraat -- 14:30</option>
                                <option value="Bus 3A -- Corner of Jasper Drive and Tieroog Street -- 14:30">Bus 3A -- Corner of Jasper Drive and Tieroog Street -- 14:30</option>
                                <option value="Bus 3B -- Corner of Louise Street and Von Willich Drive -- 14:40">Bus 3B -- Corner of Louise Street and Von Willich Drive -- 14:40</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>