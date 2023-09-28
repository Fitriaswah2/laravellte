@include('admin/header');

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       pengaturan data
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="#">setting</li>
       <li class="active">Web</li>
     </ol>
   </section>

   <!-- Main content -->

   <section class="content">
     <div class="row">
       <div class="col-md-12">

       <div class="box box-pimary">
         <div class="box-header with-border">
           <h3 class="box-title">
             quick example
           </h3>
         </div>

         <form role="from">
           <div class="box-body">
             
             <div class="from-group">
               <label for="exampleInputEmail">email adress</label>
               <input type="email" class="from-control" id="exampleInputEmail" placeholder="Enter email">
             </div>

             <div class="from-group">
               <label for="exampleInputPassword">password</label>
               <input type="password" class="from-control" id="exampleInputPassword" placeholder="Password">
             </div>

             <div class="from-group">
               <label for="exampleInputFile">file input</label>
               <input type="file" id="exampleInputFile">

               <p class="help-block">EXAMPLE BLOCK</p>
             </div>

             <div class="checkbox">
               <label>
                 <input type="checkbox">check me out
               </label>
             </div>
           </div>

           <div class="box-footer">
             <button type="submit" class="btn btn-primary"> submit </button>
           </div>
         </form>
       </div>

       </div>
     </div>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->


 @include('admin/footer');