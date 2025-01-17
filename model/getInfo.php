<?php
include('config.php');
include('functions.php');
$statusRes = 'failed';
$schools = $depts = null;

if (isset($_GET['get_data'])) {
  $get_data = $_GET['get_data'];

  if ($get_data == 'schools') {
    $school_query = mysqli_query($conn, "SELECT * FROM schools");

    if (mysqli_num_rows($school_query) >= 1) {
      $schools = array();

      while ($school = mysqli_fetch_array($school_query)) {
        // Count total students (students + HOCs)
        $student_count_query = mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM users WHERE (role = 'student' OR role = 'hoc') AND school = '{$school['id']}'");
        $student_count_result = mysqli_fetch_assoc($student_count_query);
        $total_students = $student_count_result['total_students'];

        // Count departments
        $department_count_query = mysqli_query($conn, "SELECT COUNT(*) AS total_departments FROM depts WHERE school_id = '{$school['id']}'");
        $department_count_result = mysqli_fetch_assoc($department_count_query);
        $total_departments = $department_count_result['total_departments'];

        // Add data to array
        $schools[] = array(
          'id' => $school['id'],
          'name' => $school['name'],
          'code' => $school['code'],
          'status' => $school['status'],
          'total_students' => $total_students,
          'total_departments' => $total_departments
        );
      }
      $statusRes = "success";
    } else {
      $statusRes = "not found";
    }
  }

  if ($get_data == 'school_dept') {
    $school_id = $_GET['school'];
    $dept = $_GET['dept'];
    $school_ = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM schools WHERE id = $school_id"));
    $dept_query = mysqli_query($conn, "SELECT * FROM depts WHERE id = $dept AND school_id = $school_id");

    $depts = "NULL";
    if (mysqli_num_rows($dept_query) > 0) {
      $dept_ = mysqli_fetch_array($dept_query);
      $depts = $dept_['name'];
    }
    $schools = $school_['name'];
    $statusRes = "success";
  }
}

if (isset($_POST['get_data'])) {
  $get_data = $_POST['get_data'];

  if ($get_data == 'depts') {
    $school = $_POST['school'];
    $dept_query = mysqli_query($conn, "SELECT * FROM `depts` WHERE school_id = $school");

    if (mysqli_num_rows($dept_query) >= 1) {
      $depts = array();

      while ($dept = mysqli_fetch_array($dept_query)) {
        // Count total students in the department (students + HOCs)
        $student_count_query = mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM users WHERE role = 'student' AND dept = '{$dept['id']}'");
        $student_count_result = mysqli_fetch_assoc($student_count_query);
        $total_students = $student_count_result['total_students'];

        // Count HOCs specifically in the department
        $hoc_count_query = mysqli_query($conn, "SELECT COUNT(*) AS total_hocs FROM users WHERE role = 'hoc' AND dept = '{$dept['id']}'");
        $hoc_count_result = mysqli_fetch_assoc($hoc_count_query);
        $total_hocs = $hoc_count_result['total_hocs'];

        // Add data to array
        $depts[] = array(
          'id' => $dept['id'],
          'name' => $dept['name'],
          'total_students' => $total_students,
          'total_hocs' => $total_hocs,
          'status' => $dept['status']
        );
      }
      $statusRes = "success";
    } else {
      $statusRes = "not found";
    }
  }
}

$responseData = array(
  "status" => "$statusRes",
  "schools" => $schools,
  "departments" => $depts
);

// Set the appropriate headers for JSON response
header('Accept-Encoding: gzip, deflate');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Content-Type: application/json');

// Encode the data as JSON and send it
echo json_encode($responseData);
