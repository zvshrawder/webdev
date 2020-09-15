$(document).ready(function () {
    "use strict";

    /*start of Nav Bar Nav code*/

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

    $('.nav_bar').on("click", ".mainNavItem a", function (el) {

       var elementClasses = $(this).attr('class');
        try {
            elementClasses = elementClasses.split(" ");
            var childNavClass = getChildNavClass(elementClasses);
            el.preventDefault();
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

    /*end of Nav Bar code*/

    /*start of Head search code*/


    //replace icon with search box
    $('.header_bar').on("click",".searchIcon", function(el)
    {
        //hide the div with the search icon and unhide the one with the search bar
        $('.header_bar').find('.searchContainer').has('input').removeClass('searchHidden');
        $( "#headerSearchBox" ).focus();
        $('.header_bar').find('.searchContainer').has('a').addClass('searchHidden');

        el.preventDefault();



    });


    //send search to search page
    //trigered by pressing enter
        $('.header_bar').on('keypress',"#headerSearchBox", function(en)
        {
            if(en.which == 13)
            {
                var url ="";
                //get origin url
                var origin   = window.location.origin;

                var str = $("#headerSearchBox").val();
                url=origin+"/search?search="+str;
                window.location.assign(url);
            }
        });


    //getback prepopulated possible results (changes on text entry into the box
    // and should use an AJAX request to a RESTFUL API to get back n results
    //


    //should be used to build rows floating over content holding the n results
    //Param:Array of results
    //return: void
    function showHeadSearchResults(arr)
    {

    }

    /*end of Head search code*/

});