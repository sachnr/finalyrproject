<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
<jsp:useBean id="sBeanBranch" class="coreC.AdminBranc" scope="request"/>
			<tr>
			<td>
			<jsp:getProperty name="sBeanBranch" property="branchId" /><br>
			<td>
			<jsp:getProperty name="sBeanBranch" property="branchName" /><br>
		
			<form action="MainServlet">
			
			<input type="hidden" name="branchId" value='<jsp:getProperty name="sBeanBranch" property="branchId"/>' >
			<input type="submit" name="param" value='modifyBranch'></form>
</body>
</html>