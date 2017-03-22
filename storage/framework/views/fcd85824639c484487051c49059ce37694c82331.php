<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Fitur
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>

</head>
<body>
 <div class="container">
 	<h3><a><</a>2017 / 03 <a>></a></h3>
 	<br>
 	<table class="table table-bordered">
 		<tr>
 			<th>M</th>
 			<th>S</th>
 			<th>S</th>
 			<th>R</th>
 			<th>K</th>
 			<th>J</th>
 			<th>S</th>
 		</tr>
 		<tr>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td>1</td>
 			<td>2</td>
 			<td>3</td>
 			<td>4</td>
 		</tr>
 		<tr>
 			<td>5</td>
 			<td>6</td>
 			<td>7</td>
 			<td>8</td>
 			<td>9</td>
 			<td>10</td>
 			<td>11</td>
 		</tr>
 		<tr>
 			<td>12</td>
 			<td>13</td>
 			<td>14</td>
 			<td>15</td>
 			<td>16</td>
 			<td>17</td>
 			<td>18</td>
 		</tr>
 		<tr>
 			<td>19</td>
 			<td class="today">20</td>
 			<td>21</td>
 			<td>22</td>
 			<td>23</td>
 			<td>24</td>
 			<td>25</td>
 		</tr>
 		<tr>
 			<td>26</td>
 			<td>27</td>
 			<td>28</td>
 			<td>29</td>
 			<td>30</td>
 			<td>31</td>
 			<td></td>
 		</tr>
 	</table>
 </div> 
</body>
</html> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>