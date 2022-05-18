<htmL>

    <body>

        <head>

            <title> Registration Form </title>

        </head>

        <form>

            <div>

                        <h1> Event Registration </h1>

                Enter First name: <input type = "text" value = ""><br><br>
                Enter Last name: <input type = "text" value = " "><br><br>
                Enter User ID: <input type = "text" value = " "><br><br>
                Enter Email ID: <input type = "text" value = " "><br><br>
                Enter Contact number: <input type = "text" value = " "><br><br>

                <tr>

                    <td><lable for="gender">Gender:  </lable></td>

                    <td>Male:<input type = "radio" name ="gender" value="Male">

                        Female:<input type = "radio" name ="gender" value="Female">

                        </td>

                </tr>

            </div><br>

            <div>

                Country:

                <select>

                    <option value = "Select Country">Country</option>
                    <option value = "India"> India</option>
                    <option value = "Brazil"> Brazil</option>
                    <option value = "Canada"> Canada</option>
                    <option value = "Russia"> Russia</option>
                    <option value = "U.S.A"> U.S.A.</option>

                </select>

            </div><br>

            <div>

                <tr>

                    <td><lable for="education">Education: </lable></td>

                    <td>S.S.C<input type = "checkbox" name ="education" value="SSC">
                        H.S.C<input type = "checkbox" name ="education" value="HSC">
                        B.E.<input type = "checkbox" name ="education" value="BE">
                        M.E.<input type = "checkbox" name ="education" value="ME">
                        Others<input type = "checkbox" name ="education" value="others">

                    </td>   

                </tr>

            </div><br>

            <div>

                Comments: <input type = "text" value =" ">

            </div><br>

            <div>

                Password: <input type ="password">
                Confirm Password: <input type ="password">

            </div><br>

            <div>

                <input type ="button" value = "submit">

            </div>

        </form>

    </body>

</html>

