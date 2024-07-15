<style>

    body{
        margin: 0;
    }

    .container{
        background-color: lightgray;
        /* min-height: 100vh; */
        font-family: "Poppins", sans-serif;
    }

    .header{
        background-color: black;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .search{ 
        display: flex;
        justify-content: center;
        align-content: center;
        position: absolute;
        right: 30px;
        top: 4%;
    }

    #pokemon{    
        height: 21px;
        font-family: 'Poppins';
    }

    .submit{
        font-family: 'Poppins', 'serif';
        font-weight: bold;
        border: solid white 2px;
        border-radius: 5px;
        background-color: black;
        color: white;
    }

    .submit:hover{
        background-color: white;
        color: black;
        cursor: pointer;
    }

    .content{
        padding-left: 20px;
        display: flex;
        justify-content: center;
    }

    .description{
        margin-top: 30px;
        border: solid 4px;
        border-radius: 10px;
        background-color: whitesmoke;
    }

    .info{
        border-bottom: solid;
    }

    .img{
        border-bottom: solid;
        background-color: cornsilk;
    }

    .status{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .info{
        display: flex;
        justify-content: center;
        flex-direction: row;
        gap: 5px;
        text-transform: capitalize;
    }

    #numeroPokemon{
        color: lightslategray;
    }

    .type{
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    #evolutionChain{
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    footer{
        background-color: black;
        display: flex;
        justify-content: center;
        margin-top: 3%;
        color: white;
        height: 40px;
        gap: 10px;
        align-items: center;
    }


</style>