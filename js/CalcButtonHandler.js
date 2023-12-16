class CalcButtonHandler
{
    /**@private
     * @metod
     */
    static MakeRequest(operation)
    {
        $.ajax({
            url: "/classes/Calc.php",
            method: 'get',
            dataType: 'html',
            data: {text: operation},
            success: function(data){
                document.getElementById("output_field").innerHTML = data;
            }
        });
    }

    /**
     * @metod
     */
    static buttonClck(clicked_id)
    {
       this.clicked_btn = document.getElementById(clicked_id);
        if (parseInt(this.clicked_btn.textContent) !== undefined) {
            document.getElementById("output_field").innerHTML += this.clicked_btn.textContent;
        }
        else
        {
            if(this.clicked_btn.textContent === 'C')
            {
                document.getElementById("output_field").innerHTML = "";
            }
            else
            {
                this.MakeRequest(this.clicked_btn.textContent);
            }
        }
    }
}