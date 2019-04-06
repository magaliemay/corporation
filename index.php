
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Admin Area | Dashboard</title>



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-style.css" rel="stylesheet">
<link href="css/dataTable.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
   
  </head>
  <body>
 
  <nav class="navbar navbar-expand-md navbar-default">
    <a class="navbar-brand" href="#">MPANWI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tickets</a>
        </li>
      </ul>

       <ul class="navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Manley Louis</a>
        </li>
      
              
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
       
      </ul>
     <!--  <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </fo -->
    </div>
  </nav>

  <header id="header">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-10">
  				<h1><i class="fas fa-cogs"></i> Dashboard <small>Manage Your Site</small></h1>
  			</div>

  			<div class="col-md-12">

  			</div>
  		</div>
  	</div>
  </header>

  	<section id="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div> 	
  	</section>

  	<section id="main">
		<div class="container">
			<div class="row">
				<div  class="col-md-3">
					<div class="list-group">
						<a href="#" class="list-group-item active main-color-bg"><i class="fas fa-cog"></i> Dashboaard</a>
						<a href="#" id="newTicket" class="list-group-item"><i class="fas fa-ticket-alt"></i> New ticket <span class="badge badge-secondary float-right m-2">12</span></a>
						<a href="#" class="list-group-item"><i class="fas fa-clipboard-list"></i> Tickets <span class="badge badge-secondary float-right m-2">2</span></a>
						<a href="#" class="list-group-item"><i class="fas fa-user-tie"></i> Users <span class="badge badge-secondary float-right m-2">2</span></a>
					</div>
					<br>
					<div class="card bg-light">
						<small>Disk Space Used</small>
						<div class="progress">
	  						<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>


						<small>Disk Bandwidth Used</small>
						<div class="progress">
	  						<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="800" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div>
					</div>
				</div>

				<div  class="col-md-9">
					<div class="card">
						<div class="card-header main-color-bg">Website Overview</div>
						<div class="card-body">

						    <div class="col-md-3 card-fix">
						    	<div class="card card-body bg-light">
						    		<h2><i class="fas fa-ticket-alt"></i> 12</h2>
						    		<h4>Users</h4>
						    	</div>
						    </div>

						    <div class="col-md-3 card-fix">
						    	<div class="card card-body bg-light">
						    		<h2><i class="fas fa-clipboard-list"></i> 2</h2>
						    		<h4>Users</h4>
						    	</div>
						    </div>

						    <div class="col-md-3 card-fix">
						    	<div class="card card-body bg-light">
						    		<h2><i class="fas fa-user-tie"></i> 2</h2>
						    		<h4>Users</h4>
						    	</div>
						    </div>

						    
					  	</div>
					</div>


					<br>
					<div class="card">
						<div class="card-header main-color-bg">Latest Users</div>
						<div class="card-body">
				

						<table id="example" class="table table-striped table-hover">
						        <thead>
						            <tr>
						                <th>Name</th>
						                <th>Position</th>
						                <th>Office</th>
						                <th>Age</th>
						                <th>Start date</th>
						                <th>Salary</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>Gavin Joyce</td>
						                <td>Developer</td>
						                <td>Edinburgh</td>
						                <td>42</td>
						                <td>2010/12/22</td>
						                <td>$92,575</td>
						            </tr>
						            <tr>
						                <td>Jennifer Chang</td>
						                <td>Regional Director</td>
						                <td>Singapore</td>
						                <td>28</td>
						                <td>2010/11/14</td>
						                <td>$357,650</td>
						            </tr>
						            <tr>
						                <td>Brenden Wagner</td>
						                <td>Software Engineer</td>
						                <td>San Francisco</td>
						                <td>28</td>
						                <td>2011/06/07</td>
						                <td>$206,850</td>
						            </tr>
						            <tr>
						                <td>Fiona Green</td>
						                <td>Chief Operating Officer (COO)</td>
						                <td>San Francisco</td>
						                <td>48</td>
						                <td>2010/03/11</td>
						                <td>$850,000</td>
						            </tr>
						            <tr>
						                <td>Shou Itou</td>
						                <td>Regional Marketing</td>
						                <td>Tokyo</td>
						                <td>20</td>
						                <td>2011/08/14</td>
						                <td>$163,000</td>
						            </tr>
						            <tr>
						                <td>Michelle House</td>
						                <td>Integration Specialist</td>
						                <td>Sidney</td>
						                <td>37</td>
						                <td>2011/06/02</td>
						                <td>$95,400</td>
						            </tr>
						            <tr>
						                <td>Suki Burks</td>
						                <td>Developer</td>
						                <td>London</td>
						                <td>53</td>
						                <td>2009/10/22</td>
						                <td>$114,500</td>
						            </tr>
						            <tr>
						                <td>Prescott Bartlett</td>
						                <td>Technical Author</td>
						                <td>London</td>
						                <td>27</td>
						                <td>2011/05/07</td>
						                <td>$145,000</td>
						            </tr>
						            <tr>
						                <td>Gavin Cortez</td>
						                <td>Team Leader</td>
						                <td>San Francisco</td>
						                <td>22</td>
						                <td>2008/10/26</td>
						                <td>$235,500</td>
						            </tr>
						            <tr>
						                <td>Martena Mccray</td>
						                <td>Post-Sales support</td>
						                <td>Edinburgh</td>
						                <td>46</td>
						                <td>2011/03/09</td>
						                <td>$324,050</td>
						            </tr>
						            <tr>
						                <td>Unity Butler</td>
						                <td>Marketing Designer</td>
						                <td>San Francisco</td>
						                <td>47</td>
						                <td>2009/12/09</td>
						                <td>$85,675</td>
						            </tr>
						            <tr>
						                <td>Howard Hatfield</td>
						                <td>Office Manager</td>
						                <td>San Francisco</td>
						                <td>51</td>
						                <td>2008/12/16</td>
						                <td>$164,500</td>
						            </tr>
						            <tr>
						                <td>Hope Fuentes</td>
						                <td>Secretary</td>
						                <td>San Francisco</td>
						                <td>41</td>
						                <td>2010/02/12</td>
						                <td>$109,850</td>
						            </tr>
						            <tr>
						                <td>Vivian Harrell</td>
						                <td>Financial Controller</td>
						                <td>San Francisco</td>
						                <td>62</td>
						                <td>2009/02/14</td>
						                <td>$452,500</td>
						            </tr>
						            <tr>
						                <td>Timothy Mooney</td>
						                <td>Office Manager</td>
						                <td>London</td>
						                <td>37</td>
						                <td>2008/12/11</td>
						                <td>$136,200</td>
						            </tr>
						            <tr>
						                <td>Jackson Bradshaw</td>
						                <td>Director</td>
						                <td>New York</td>
						                <td>65</td>
						                <td>2008/09/26</td>
						                <td>$645,750</td>
						            </tr>
						            <tr>
						                <td>Olivia Liang</td>
						                <td>Support Engineer</td>
						                <td>Singapore</td>
						                <td>64</td>
						                <td>2011/02/03</td>
						                <td>$234,500</td>
						            </tr>
						            <tr>
						                <td>Bruno Nash</td>
						                <td>Software Engineer</td>
						                <td>London</td>
						                <td>38</td>
						                <td>2011/05/03</td>
						                <td>$163,500</td>
						            </tr>
						            <tr>
						                <td>Sakura Yamamoto</td>
						                <td>Support Engineer</td>
						                <td>Tokyo</td>
						                <td>37</td>
						                <td>2009/08/19</td>
						                <td>$139,575</td>
						            </tr>
						            <tr>
						                <td>Thor Walton</td>
						                <td>Developer</td>
						                <td>New York</td>
						                <td>61</td>
						                <td>2013/08/11</td>
						                <td>$98,540</td>
						            </tr>
						            <tr>
						                <td>Finn Camacho</td>
						                <td>Support Engineer</td>
						                <td>San Francisco</td>
						                <td>47</td>
						                <td>2009/07/07</td>
						                <td>$87,500</td>
						            </tr>
						            <tr>
						                <td>Serge Baldwin</td>
						                <td>Data Coordinator</td>
						                <td>Singapore</td>
						                <td>64</td>
						                <td>2012/04/09</td>
						                <td>$138,575</td>
						            </tr>
						            <tr>
						                <td>Zenaida Frank</td>
						                <td>Software Engineer</td>
						                <td>New York</td>
						                <td>63</td>
						                <td>2010/01/04</td>
						                <td>$125,250</td>
						            </tr>
						            <tr>
						                <td>Zorita Serrano</td>
						                <td>Software Engineer</td>
						                <td>San Francisco</td>
						                <td>56</td>
						                <td>2012/06/01</td>
						                <td>$115,000</td>
						            </tr>
						            <tr>
						                <td>Jennifer Acosta</td>
						                <td>Junior Javascript Developer</td>
						                <td>Edinburgh</td>
						                <td>43</td>
						                <td>2013/02/01</td>
						                <td>$75,650</td>
						            </tr>
						            <tr>
						                <td>Cara Stevens</td>
						                <td>Sales Assistant</td>
						                <td>New York</td>
						                <td>46</td>
						                <td>2011/12/06</td>
						                <td>$145,600</td>
						            </tr>
						            <tr>
						                <td>Hermione Butler</td>
						                <td>Regional Director</td>
						                <td>London</td>
						                <td>47</td>
						                <td>2011/03/21</td>
						                <td>$356,250</td>
						            </tr>
						            <tr>
						                <td>Lael Greer</td>
						                <td>Systems Administrator</td>
						                <td>London</td>
						                <td>21</td>
						                <td>2009/02/27</td>
						                <td>$103,500</td>
						            </tr>
						        </tbody>
						        <tfoot>
						            <tr>
						                <th>Name</th>
						                <th>Position</th>
						                <th>Office</th>
						                <th>Age</th>
						                <th>Start date</th>
						                <th>Salary</th>
						            </tr>
						        </tfoot>
						    </table>
					  	</div>
					</div>
				</div>

			</div>
		</div> 	
  	</section>

   	<div class="modal fade" id="addTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		     	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel">Add Ticket</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<form>
		      		<label>Summary:</label>
                  <input type="text" name="" class="form-control"><br>

                  <label>Reporter:</label>
                  <input type="text" name="" class="form-control"><br>

                  <label>Description:</label>
                  <textarea name="editor1" class="form-control" placeholder="Page Body" rows="10" cols="5"></textarea>

                  <table class="table table-responsive">
                    <tr>
                      <td><label>Type:</label></td>
                      <td class="col-md-6 col-sm-2"> 
                        <select>
                          <option value="defect">Defect</option>
                          <option value="enhancement">Enhancement</option>
                          <option value="task">Task</option>
                          <option value="idea">Idea</option>
                          <option value="quote">Quoted</option>
                          <option value="request">Request</option>
                        </select>
                      </td>     

                      <td><label>Milestones:</label></td>
                      <td class="col-md-6 col-sm-2">  
                        <select>
                          <option value="defect">Starting date</option>
                          <option value="enhancement">End date</option>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td><label>Priority:</label></td>
                      <td class="col-md-6 col-sm-2"> 
                        <select>
                          <option value="high">Critical</option>
                          <option value="normal">Normal</option>
                          <option value="low">Low</option>
                        </select>
                      </td>

                      <td><label>Owner:</label></td>
                      <td class="col-md-6 col-sm-2">  
                        <select>
                          <option>&nbsp;</option>
                        </select>
                      </td>
                    </tr>
                  </table>

                  <!-- <input type="submit" name="" value="Save" class="btn btn-info form-control"><br>
			      	<div class="modal-body">			        	
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>

					  	<div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  	</div>

					  	<div class="form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  	</div>	

					  	<div class="form-check">
						    <label class="form-check-label" for="exampleCheck1">Message</label>
						    <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
					  	</div>	
			      	</div> -->

			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		      	</form>
		    </div>
		</div>
	</div>

<main role="main">





  <!-- FOOTER -->
<!--   <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
 --></main>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/style.js"></script>
  </body>
</html>

<script>
	CKEDITOR.replace('editor1');
</script>
