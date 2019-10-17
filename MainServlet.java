package coreC;

import java.io.IOException;



import java.sql.Date;
import java.sql.*;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest; 
import javax.servlet.http.HttpServletResponse;









import com.mysql.jdbc.PreparedStatement;

import coreC.ConnectDB;





/**
 * Servlet implementation class MainServlet
 */
@WebServlet("/MainServlet")
public class MainServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public MainServlet() {
    	 super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException
	{
		 c=0;
		this.request=request;
        this.response=response;
		String param=request.getParameter("param");
		if(param==null)
		{
			param="null";

		}
		switch(param)
		{
			case "null":login_Page();
			break;
			case "Register":registrationPage();
			break;
			case "login":afterLoginPage();
			break;
			case "studentInfo":studentInfo();
			break;
			case "course":studentCourse();
			break;
			case "modify":modifyCourse();
			break;
			case "update":updateCourse();
			break;
			case "User":user();
			break;
			case "modifyUser":modifyUser();
			break;
			case "updateUser":updateUser();
			break;
			case "studentRegister":studentRegister();
			break;
			case "userRegistered":try {
				userRegistered();
			} catch (ParseException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			break;
			case "registered":registered();
			break;
			case "new StudentRegistration":studentRegister();
			break;
			case "home":afterLoginPage();
			break;
			case "branch":studentBranch();
			break;
			case "modifyBranch":modifyBranch();
			break;
			case "updateBranch":updateBranch();
			break;
			case "studentTable":studentTable();
			break;
		}
	}
		public void login_Page()throws IOException,ServletException
		{
			String url="login1.jsp";
			c=0;
			RequestDispatcher dis=request.getRequestDispatcher(url);
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT COUNT(*)FROM user WHERE USER_TYPE='703'");
				User us=new User();
				
					while(rs.next())
					{
						us.setUsrType(Integer.parseInt(rs.getString("USR_TYPE")));
						us.setUsrLoginId(rs.getString("USR_LOGIN_ID"));
						us.setUsrLoginPwd(rs.getString("USR_LOGIN_PWD"));
						request.setAttribute("sBean",us);
						dis.include(request,response);
						
					}
				
				
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}

			dis.forward(request,response);
			
		
			
		}
		
		public void registrationPage()throws IOException,ServletException
		{
			String url2="Registration.jsp";
			String username=request.getParameter("uname");
			String password=request.getParameter("psw");
			String confirmPassword=request.getParameter("psw1");
			
			RequestDispatcher dis=request.getRequestDispatcher(url2);
			dis.forward(request,response);
			
		}
		public void studentInfo()throws IOException,ServletException
		{
			String url="login1.jsp";
			String url1="Registration.jsp";
			int userType=703;
			java.sql.Date date=new java.sql.Date(new java.util.Date().getTime());
			String username=request.getParameter("uname");
			String password=request.getParameter("psw");
			String confpassword=request.getParameter("psw1");
			RequestDispatcher dis=request.getRequestDispatcher(url);
			
			
			if(password.equals(confpassword))
			{
				
				try
				{
					Connection conn=ConnectDB.getConnection();
					Statement stat=conn.createStatement();
					stat.execute("INSERT INTO user(USR_TYPE,USR_LOGIN_ID,USR_LOGIN_PWD,USR_CREATION_TIME) VALUES('"+userType+"','"+username+"','"+password+"','"+date+"')");
					dis.include(request,response);
				}
					
					
					
				catch(SQLException ex)
				{
					ex.printStackTrace();
				}
			}
			else
			{
				RequestDispatcher dis1=request.getRequestDispatcher(url1);
				dis1.include(request,response);
			}
			
		}

		public void studentCourse()throws IOException,ServletException
		{
			String url1="admin.jsp";
			String url2="table.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url2);
			dis.include(request,response);
			dis=request.getRequestDispatcher(url1);
			String username=request.getParameter("uname");
			String password=request.getParameter("psw");
			
			dat=new ArrayList<AdminData>();
			
				try
				{
					Connection conn=ConnectDB.getConnection();
					Statement stat=conn.createStatement();
					ResultSet rs=stat.executeQuery("SELECT *FROM course");
					while(rs.next())
					{
						data=new AdminData(Integer.parseInt(rs.getString("CRS_ID")),rs.getString("CRS_NAME"),Float.parseFloat(rs.getString("CRS_FEE")),Float.parseFloat(rs.getString("CRS_DUR")),rs.getString("CRS_DTL"));
						request.setAttribute("sBean",data);
						
						dat.add(data);
						dis.include(request,response);
					}
				}catch(SQLException ex)
				{
					ex.printStackTrace();
				}
			
		
				
		}
		public void afterLoginPage()throws IOException,ServletException
		{
			String url="adminPage.jsp";
			String url1="studentPage.jsp";
			String user=request.getParameter("uname");
			String psw=request.getParameter("psw");
			RequestDispatcher dis=request.getRequestDispatcher(url1);
			if(c==0)
			{
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM user");
				
				while(rs.next())
				{
					
					if((rs.getString("usr_login_id")).equals(user)&&(rs.getString("usr_login_pwd").equals(psw)))
					{
						c=1;
						dis.include(request,response);
						
					}
					
						
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			}
			else
			{
				dis.forward(request,response);
			}
			if(user.equals("admin")&&psw.equals("admin123"))
			{
				dis=request.getRequestDispatcher(url);
				dis.include(request,response);
			}
			
			 
			
		}
		public void modifyCourse()throws IOException,ServletException
		{
			String url="modify.jsp";
			int s=Integer.parseInt(request.getParameter("id"));
			
			for(AdminData d:dat)
			{
				if(s==d.getCourseId())
				{
					data=new AdminData(d.getCourseId(),d.getCourseName(),d.getCourseFee(),d.getCourseDuration(),d.getCourseDetail());
					request.setAttribute("sBean",data);
					
				}
							
				
			}
				
			RequestDispatcher dis=request.getRequestDispatcher(url);
			dis.forward(request,response);
		}
		public void updateCourse()throws IOException,ServletException
		{
		
			String url="update.jsp";
			String url1="table.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url1);
			dis.include(request,response);
			dis=request.getRequestDispatcher(url);
			int courseId=Integer.parseInt(request.getParameter("id"));
			String courseName=request.getParameter("courseName");
			float courseFee=Float.parseFloat(request.getParameter("courseFee"));
			float courseDuration=Float.parseFloat(request.getParameter("courseDuration"));
			String courseDetail=request.getParameter("courseDetail");
			System.out.print(courseId+courseName+courseFee+courseDuration);
			try
			{
				Connection conn=ConnectDB.getConnection();
				java.sql.PreparedStatement stat=conn.prepareStatement("UPDATE course SET CRS_NAME='"+courseName+"',CRS_FEE='"+courseFee+"',CRS_DUR='"+courseDuration+"',CRS_DTL='"+courseDetail+"'"+" WHERE CRS_ID='"+courseId+"'");
				stat.executeUpdate();
				System.out.print("update");
				
			}
				
				
				
			catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM course");
				while(rs.next())
				{
					data=new AdminData(Integer.parseInt(rs.getString("CRS_ID")),rs.getString("CRS_NAME"),Float.parseFloat(rs.getString("CRS_FEE")),Float.parseFloat(rs.getString("CRS_DUR")),rs.getString("CRS_DTL"));
					request.setAttribute("sBean",data);
					
					dat.add(data);
					dis.include(request,response);
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			
		}
		
		public void user()throws IOException,ServletException
		{
			String url="user.jsp";
			String url2="userTable.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url2);
			dis.include(request,response);
		    dis=request.getRequestDispatcher(url);
		    userDat=new ArrayList<User>();
						
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT * FROM user");
		
				
					while(rs.next())
					{
						userData=new User(Integer.parseInt(rs.getString("usr_id")),Integer.parseInt(rs.getString("usr_type")),rs.getString("usr_login_id"),rs.getString("usr_login_pwd"));
						request.setAttribute("sBeanUser",userData);
						userDat.add(userData);
						dis.include(request,response);
						
					}
				
				
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
		
		}
		public void modifyUser()throws IOException,ServletException
		{
			String url="modifyUser.jsp";
			int s=Integer.parseInt(request.getParameter("id"));
			RequestDispatcher dis=request.getRequestDispatcher(url);
			for(User d:userDat)
			{
				if(s==d.getUsrId())
				{
					
					userData=new User(d.getUsrId(),d.getUsrType(),d.getUsrLoginId(),d.getUsrLoginPwd());
					request.setAttribute("sBeanUser",userData);
					
				}
							
				
			}
			dis.forward(request,response);
		}
		public void updateUser()throws IOException,ServletException
		{
			System.out.print("hello1");
			String url="updateUser.jsp";
			String url1="userTable.jsp";
			System.out.print("hello");
			RequestDispatcher dis=request.getRequestDispatcher(url1);
			dis.include(request,response);
			dis=request.getRequestDispatcher(url);
			int usrId=Integer.parseInt(request.getParameter("id"));
			int usrType=Integer.parseInt(request.getParameter("usrType"));
			String usrLoginId=request.getParameter("usrLoginId");
			String usrLoginPwd=request.getParameter("usrLoginPwd");
			String usrCreationTime=request.getParameter("usrCreationTime");
			System.out.println(usrLoginPwd);
			try
			{
				Connection conn=ConnectDB.getConnection();
				java.sql.PreparedStatement stat=conn.prepareStatement("UPDATE user SET usr_type='"+usrType+"',usr_login_id='"+usrLoginId+"',usr_login_pwd='"+usrLoginPwd+"'"+" WHERE usr_id='"+usrId+"'");
				stat.executeUpdate();
				System.out.print("update");
				
			}
				
				
				
			catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM user");
				while(rs.next())
				{
					userData=new User(Integer.parseInt(rs.getString("usr_id")),Integer.parseInt(rs.getString("usr_type")),rs.getString("usr_login_id"),rs.getString("usr_login_pwd"));
					request.setAttribute("sBeanUser",userData);
					
					userDat.add(userData);
					dis.include(request,response);
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
		}
		public void studentRegister()throws IOException,ServletException
		{
			String url="test.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url);
			arrCol=new ArrayList<College>();
			dat=new ArrayList<AdminData>();
			arrBranch=new ArrayList<AdminBranc>();
			arrBatch=new ArrayList<Batch>();
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM college");
				while(rs.next())
				{
					 col=new College(Integer.parseInt(rs.getString("CLG_ID")),rs.getString("CLG_NAME"));
					arrCol.add(col);
					
			
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM branch");
				while(rs.next())
				{
					 branc=new AdminBranc(Integer.parseInt(rs.getString("BRN_ID")),rs.getString("BRN_NAME"));
					 arrBranch.add(branc);
					
			
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM course");
				while(rs.next())
				{
					data=new AdminData(Integer.parseInt(rs.getString("CRS_ID")),rs.getString("CRS_NAME"),Float.parseFloat(rs.getString("CRS_FEE")),Float.parseFloat(rs.getString("CRS_DUR")),rs.getString("CRS_DTL"));
					request.setAttribute("sBean",data);
					
					dat.add(data);
				
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM batch");
				while(rs.next())
				{
					 bat=new Batch(Integer.parseInt(rs.getString("BCH_ID")),rs.getString("BCH_TIME"));
					arrBatch.add(bat);
					
			
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			request.setAttribute("arrBranch",arrBranch);
			request.setAttribute("arrCol",arrCol);
			request.setAttribute("arrCourse",dat);
			request.setAttribute("arrBatch",arrBatch);
			dis.include(request,response);
			
		}
		public void userRegistered()throws IOException,ServletException, ParseException
		{
			String url="registered.jsp";
			String stdName=request.getParameter("name");
			String stdMob=request.getParameter("mobile");
			String stdEmail=request.getParameter("email");
			String stdAddress=request.getParameter("address");
			java.sql.Date date=new java.sql.Date(new java.util.Date().getTime());
			String userDate=request.getParameter("date");
			SimpleDateFormat convertDate = new SimpleDateFormat("yyyy-mm-dd"); 
			java.util.Date userDat=convertDate.parse(userDate);
			java.sql.Date sqlDateOfBirth = new java.sql.Date(userDat.getTime()); 
			double stdFee=Double.parseDouble((request.getParameter("fee")));
			String stdRef=request.getParameter("ref");
			String stdStartDate=request.getParameter("start");
			java.util.Date startDat=convertDate.parse(stdStartDate);
			java.sql.Date sqlStartDate = new java.sql.Date(startDat.getTime());
			String stdStopDate=request.getParameter("stop");
			java.util.Date stopDat=convertDate.parse(stdStopDate);
			java.sql.Date sqlStopDate = new java.sql.Date(stopDat.getTime());
			double stdFeeConc=Double.parseDouble((request.getParameter("fee")));
			RequestDispatcher dis=request.getRequestDispatcher(url);
			int colName=Integer.parseInt(request.getParameter("col"));
			int courName=Integer.parseInt(request.getParameter("data"));
			int brancName=Integer.parseInt(request.getParameter("branc"));
			String stdBat=request.getParameter("bat");
			System.out.print(colName);
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				stat.execute("INSERT INTO student(std_name,std_mob,std_email,std_addr,std_course,std_branch,std_college,std_dob,std_fee,std_ref,std_bch,std_start_date,std_stop_date,std_ccn) VALUES('"+stdName+"','"+stdMob+"','"+stdEmail+"','"+stdAddress+"','"+courName+"','"+brancName+"','"+colName+"','"+sqlDateOfBirth+"','"+stdFee+"','"+stdRef+"','"+stdBat+"','"+sqlStartDate+"','"+sqlStopDate+"','"+stdFeeConc+"')");
				dis.include(request, response);
			}
				
				
				
			catch(SQLException ex)
			{
				ex.printStackTrace();
			}
		}
		public void registered()throws IOException,ServletException
		{
			String url="registered.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url);
			dis.include(request,response);
		}
		public void studentBranch()throws IOException,ServletException
		{
			String url="branchTable.jsp";
			String url1="branch.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url);
			dis.include(request,response);
		    dis=request.getRequestDispatcher(url1);
			arrBranch=new ArrayList<AdminBranc>();
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM branch");
				while(rs.next())
				{
					 branc=new AdminBranc(Integer.parseInt(rs.getString("BRN_ID")),rs.getString("BRN_NAME"));
					 request.setAttribute("sBeanBranch",branc);
					 arrBranch.add(branc);
					 dis.include(request,response);
			
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
		}
		public void modifyBranch()throws IOException,ServletException
		{
			String url="ModifyBranch.jsp";
			int s=Integer.parseInt(request.getParameter("branchId"));
			RequestDispatcher dis=request.getRequestDispatcher(url);
			for(AdminBranc d:arrBranch)
			{
				if(s==d.getBranchId())
				{
					
					branc=new AdminBranc(d.getBranchId(),d.getBranchName());
					request.setAttribute("sBeanBranch",branc);
					
				}
							
				
			}
			dis.forward(request,response);
		}
		public void updateBranch()throws IOException,ServletException
		{
			String url="updateBranch.jsp";
			String url1="branchTable.jsp";
			int branchId=Integer.parseInt(request.getParameter("branchId"));
			String branchName=request.getParameter("branchName");
			RequestDispatcher dis=request.getRequestDispatcher(url1);
			dis.include(request,response);
			dis=request.getRequestDispatcher(url);
			try
			{
				Connection conn=ConnectDB.getConnection();
				java.sql.PreparedStatement stat=conn.prepareStatement("UPDATE branch SET BRN_NAME='"+branchName+"' WHERE BRN_ID='"+branchId+"'");
				stat.executeUpdate();
				System.out.print("update");
				
			}
				
				
				
			catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				ResultSet rs=stat.executeQuery("SELECT *FROM branch");
				while(rs.next())
				{
					branc=new AdminBranc(Integer.parseInt(rs.getString("BRN_ID")),rs.getString("BRN_NAME"));
					request.setAttribute("sBeanBranch",branc);
					
					arrBranch.add(branc);
					dis.include(request,response);
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
		}
		public void studentTable()throws IOException,ServletException
		{
			String url="studentTable.jsp";
			String url1="studentTab.jsp";
			RequestDispatcher dis=request.getRequestDispatcher(url1);
			dis.include(request,response);
		    dis=request.getRequestDispatcher(url);
			try
			{
				Connection conn=ConnectDB.getConnection();
				Statement stat=conn.createStatement();
				
				ResultSet rs=stat.executeQuery("SELECT *FROM student");
				while(rs.next())
				{
				
					 stud=new StudentRegister(Integer.parseInt(rs.getString("std_id")),rs.getString("std_name"),rs.getString("std_mob"),rs.getString("std_email"),rs.getString("std_addr"),rs.getString("std_course"),rs.getString("std_branch"),rs.getString("std_college"),rs.getDate("std_dob"),Double.parseDouble(rs.getString("std_fee")),rs.getString("std_ref"),rs.getString("std_bch"),rs.getDate("std_start_date"),rs.getDate("std_stop_date"),Double.parseDouble(rs.getString("std_ccn")));
					
					 request.setAttribute("sBeanStudent",stud);
					 System.out.print("hello");
				
					 dis.include(request,response);
			
					
				}
			}catch(SQLException ex)
			{
				ex.printStackTrace();
			}
			
		}
	private	HttpServletRequest request;
	private	HttpServletResponse response;
	private	AdminData data;
	private	ArrayList<AdminData> dat;
	private User userData;
	private	ArrayList<User> userDat;
	private College col;
	private ArrayList<College> arrCol;
	private ArrayList<AdminBranc> arrBranch;
	private AdminBranc branc;
	private ArrayList<Batch> arrBatch;
	private Batch bat;
	private StudentRegister stud;
	private ArrayList<StudentRegister> arrStud;
	private int c;

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
