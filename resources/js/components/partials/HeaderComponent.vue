<template>
  <header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a class="active" href="#">Blog</a></li>
            <li><a href="#">Chi Siamo</a></li>
            <li><a href="#">Contatti</a></li>
        </ul>
    </nav>
  </header>
</template>

<script>
export default {
    name: 'HeaderComponent'
}
</script>

<style lang="scss" scoped>
header{
    background: brown;
    padding: 20px;
    ul{
        list-style: none;
        text-align: center;

        li{
            display: inline-block;
        a{
            color: white;
            text-decoration: none;
            margin:  0 10px;
            &:hover{
                text-decoration: underline;
            }
            &.active{
                color: yellow;
            }
        }
        }


    }
    }

</style>
