package com.cybertrace.location.controler;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.cybertrace.location.*;
import com.cybertrace.location.dao.GestionDaoImpl;
import com.cybertrace.location.dao.IGestionDao;
import com.cybertrace.location.model.User;

/**
 * Servlet implementation class Verif
 */
@WebServlet("/Verif")
public class Verif extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Verif() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String emailuser=request.getParameter("emailuser");
		HttpSession session= request.getSession();
		IGestionDao dao=new GestionDaoImpl();
		
		User u= dao.verif(emailuser);
		if(u==null) {
			session.setAttribute("message", "verifier vos données Mr/MMe!!");
			session.setAttribute("type", "danger");
			request.getRequestDispatcher("connexion.jsp").forward(request, response);
		}else {
			
			session.setAttribute("user", u);
			request.getRequestDispatcher("accueil").forward(request, response);
		}
		
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
