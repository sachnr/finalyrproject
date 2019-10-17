package coreC;
import java.sql.*;
public class ConnectDB
{
	public static Connection getConnection()
	{
		if(conn==null)
		{
			try
			{
				Class.forName("com.mysql.jdbc.Driver");
				conn=DriverManager.getConnection(url,user,pwd);
			}
			catch(ClassNotFoundException ex)
			{
				System.out.println("driver class not found");
				ex.printStackTrace();
			}
			catch(SQLException ex)
			{
				System.out.println("SQL Exception");
				ex.printStackTrace();
			}
		}
		return conn;
	}
	private static String url="jdbc:mysql://127.0.0.1:3306/corecs";
	private static String user="core";
	private static String pwd="core123";
	private static Connection conn=null;
}