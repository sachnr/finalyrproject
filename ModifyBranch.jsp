<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
<%@page import="coreC.*"%>
<form action="MainServlet">
	<jsp:useBean id="sBeanBranch" class="coreC.AdminBranc" scope="request"/>
			<tr>
			<td>
			branch_Id:<jsp:getProperty name="sBeanBranch" property="branchId" /><br>
			<td>
			branch_Name:<input type=value name='branchName' value='<jsp:getProperty name="sBeanBranch" property="branchName" />'><br>
			<td> 
		
			
			
			<input type="hidden" name="branchId" value='<jsp:getProperty name="sBeanBranch" property="branchId"/>' >
			<input type="submit" name="param" value='updateBranch'></form>
</body>
</html>