package myPackage;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class LoginServlet
 */
@WebServlet("/loginServlet")
public class LoginServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public LoginServlet() {
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
//		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
//		doGet(request, response);
		HttpSession session = request.getSession(false);
		if(session.getAttribute("fullName") == null &&  session.getAttribute("email") == null 
				&& session.getAttribute("school") == null && session.getAttribute("major") == null) {
			session = request.getSession();
			String name = request.getParameter("fullName");
			String email = request.getParameter("email");
			String school = request.getParameter("school");
			String major = request.getParameter("major");
			
			session.setAttribute("fullName", name);
			session.setAttribute("email", email);
			session.setAttribute("school", school);
			session.setAttribute("major", major);

			response.getWriter().append("Session started, variables stored");
			response.getWriter().append("<a href = 'http://localhost:8080/PL/KLe-assignment5.jsp'>Go Back</a>");
		}
		else {
			if(!request.getParameter("fullName").equals(session.getAttribute("fullName"))){
				response.getWriter().append("Name successfully changed!");
			}
			if(!request.getParameter("email").equals(session.getAttribute("email"))){
				response.getWriter().append("Email successfully changed!");
			}
			if(!request.getParameter("school").equals(session.getAttribute("school"))){
				response.getWriter().append("School successfully changed!");
			}
			if(!request.getParameter("major").equals(session.getAttribute("major"))){
				response.getWriter().append("Major successfully changed!");
			}
		}
	}

}
