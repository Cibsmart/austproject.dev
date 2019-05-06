@extends('layouts.app')

@section('content')
    <form action="" method = "">
        <fieldset>
            <legend> Personal Details</legend>
      First Name*: <input type="text" name = "firstname" required><br>
            Middle Name: <input type = "text" name = "middlename"><br>
        Last Name*: <input type = "text" name = "lastname"required><br>
            Gender*: <input type="radio" name = "gender" value=" male" required> Male
            <input type="radio" name="gender" value = "female"required> Female<br>

            Marital status*: <select name = "maritalstatus" >
                <option value="default">Please select</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value = "divorced">divorced</option>
            </select><br>
            Date of Birth*: <input type="date" name ="dob" required><br>

            Nationality*: <select name = "nationality" required>
                <option value ="selectcountry">select country</option>
                <option value = "nigeria">Nigeria</option>
            </select><br>

            State of Origin(for Nigerians only)
            <select>
                <option value = "selectstate">Select state</option>
                <option>Enugu</option>
            </select><br>
            Do you have any disability* <input type="radio" name="disability" value = "yes"> Yes
            <input type="radio" name="disability" value = "no"> No<br>
        </fieldset>

        <fieldset>
            <legend>Contact Details</legend>
            Email*: <input type="email" name ="email" required><br>
            Mobile Number: <input type="tel" name = "number" required><br>
            Country of Residence <select>
                <option> Select country</option>
                <option>Rwanda</option>
            </select><br>
            State of Residence(if selected Nigeria): <select>
                <option value="sor">Select state</option>
                <option value="fct">FCT</option>
            </select><br>
            City/Town: <input type="text"required>
            Zip code: <input type="number" name = "zipcode"><br>
            Address: <input type="text" name="address">
        </fieldset>

        <fieldset>
            <legend>Educational Background</legend>
            <p>Please list all academic qualififcations in chronological order. Evidence of your qualification yo have
                completed muct be submitted with this application</p>
            From date: <input type ="date" name = "startdate" required><br>
            End date: <input type="date" name = "enddate"><br>
            Institution name*: <input type="text"name ="institution" required><br>
            Degree: <select name ="degree" >
                <option value="HND">HND</option>
                <option value="B.Sc">B.SC</option>
                <option value="Msc">MSc</option>
            </select><br>
            Country: <select name ="institutioncountry" required>
                <option value="select">Please select</option>
                <option value="niger">Niger</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Program of study</legend>
            Program of study*:<input type="radio" name="program" value="Msc"required>M.Sc
            <input type="radio" name="program" value="Phd"required>PhD<br>

            Select program of choice: <select name ="programchoice">
                <option value ="pleaseselect">Please Select</option>
                <option value ="appliedstatistics">Applied Statistics</option>
                <option value ="aerospace">Aerospace Engineering</option>
                <option value ="ComputerScience">Computer Science</option>
                <option value ="Geoinformatics">Geoinformatics</option>
                <option value ="mit">management Information Technology</option>
                <option value ="materialsScience">Materials Science & Engineering</option>
                <option value ="petroleumengineering">Petroleum Engineering</option>
                <option value ="mathematicalmodeling">Mathematical Modeling</option>
                <option value ="publicpolicy">Public policy</option>
                <option value ="pureandappliedmathematics">Pure & Applied Mathematics</option>
                <option value ="spacephysics">Space Physics</option>
                <option value ="systemengineering">System Engineering</option>
                <option value ="pleaseselect">Theoretical & Applied Phyics</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Referee Information </legend>
          <p>  You are expected to provide atleast two  references. Ensure that the information you enter is correct as
            they would be used to contact your reference.</p>
            Title: <select name ="title">
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="dr">Dr.</option>
                <option value="prof">Prof</option>
            </select><br>

            Full Name*: <input type="text" name="fullname" required><br>
            Email*: <input type="email" name="email" required><br>
            Phone number: <input type="tel" required><br>
            Institution/Organization*: <input type="text" name="institution">
        </fieldset>

        <fieldset>
            <legend>Documents uploads</legend>
            Passport photograph*: <input type="file" name="resultsstatement"required><br>
            Statement of purpose*: <input type="file" name="sop" required><br>
            Statement of Results*: <input type="file" name="resultsstatement"required><br>
            Academic Transcript*: <input type="file" name="transcript"required><br>
            Research Proposal: <input type="file" name="Rproposal">
        </fieldset>
        <fieldset>
            <legend>Declaration</legend>
            <p> By clicking Agree, I confirm that the information I have provided in this form is true, complete and accurate
            and no information or other infromation has been omitted</p>
            <p>I acknowledge that knowing, providing false information gives AUST the right to cancel the application and grounds for
            dismissal from the University</p>
            <input type="checkbox" name="aggree" value="Iagree" required> I agree
        </fieldset>
        <input type="submit" name ="submit" value = "Submit">
    </form>
@endsection