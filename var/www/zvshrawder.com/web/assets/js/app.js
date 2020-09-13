$(document).ready(function () {
    "use strict";

    //check the passed array of classes to see if one matches
    //if so we split take the nav item name add --child to it
    //and return that.
    //otherwise we just return an empty string
    //Param: Array of css classes
    //Return:String
    function getChildNavClass(arr)
    {
        var childClass = "";
        arr.forEach(function(entry){

        if(entry.includes("--parent"))
        {

            var cl = entry.split("--")[0];
            cl+="--child";
            childClass = cl;
            return false;
        }
        });

        return childClass;


    }

    //Hides all child nav items
    //return:void
    function hideChildNavs()
    {
        $('.nav_bar').find('.childrenNavItems').addClass('hiddenNavRow');

    }

    //takes a class name and removes the hiddenNavRow class from all with it
    //param: String
    //return:void
    function showChildNavRow(className)
    {
        $('.nav_bar').find('.'+className).removeClass('hiddenNavRow');
    }

    $('.nav_bar').on("click", ".mainNavItem a", function (e) {

       var elementClasses = $(this).attr('class');
        try {
            elementClasses = elementClasses.split(" ");
            var childNavClass = getChildNavClass(elementClasses);
            e.preventDefault();
            //check if nav is open
            var isHidden =$('.nav_bar').find('.'+childNavClass).hasClass("hiddenNavRow");
            hideChildNavs();

            if(isHidden)
            {
                console.log("show");
                showChildNavRow(childNavClass);
            }

        }catch(e)
        {
            console.log(e);
        }

    });





});