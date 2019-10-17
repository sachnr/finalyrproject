<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
<jsp:useBean id="sBeanStudent" class="coreC.StudentRegister" scope="request"/>
			<tr>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdId" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdName" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdMob" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdAddress" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdCourse" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdBranch" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdCollege" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="dob" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdFee" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdRef" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdBch" /><br>
			<td>
	        <jsp:getProperty name="sBeanStudent" property="startDate" /><br>
			<td>
			<jsp:getProperty name="sBeanStudent" property="stopDate" /><br>
			
			<td>
			<jsp:getProperty name="sBeanStudent" property="stdCcn" /><br>
			<td>
		
			<form action="MainServlet">
			
			<input type="hidden" name="stdId" value='<jsp:getProperty name="sBeanStudent" property="stdId"/>' >
			<input type="submit" name="param" value='modifyStudentInfo'></form>
</body>
</html>