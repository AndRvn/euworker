<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-40 pt-2 pb-0">
        <a class="navbar-brand h1" href="#">Logo</a>
        <form class="form-inline">
            <span class="fa fa-search form-control-feedback"></span>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <div class="user-id mr-4">
                <span>ID:</span>
                <span class="id">123456</span>
            </div>

            <div class="cart mr-4 d-flex align-items-center">
                <a href="#">
                    <i class="fas fa-shopping-cart fa-3x"></i>
                </a>
                <span class="cart-count ml-2">2</span>
            </div>

            <a href="#" class="mr-4 question">
                <i class="fa fa-question-circle fa-3x"></i>
            </a>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fas fa-user fa-3x"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" @click.prevent="$auth.logout()" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {}
</script>

<style scoped lang="scss">
    $color-black: #000000;

    .navbar {
        z-index: 99;
    }

    .cart{
        .cart-count {
            display: inline-block;
            font-size: 20px;
            background-color: antiquewhite;
            width: 25px;
            height: 26px;
            text-align: center;
        }

        i {
            color: $color-black;
        }
    }

    .user-id {
        font-size: 2em;
        color: $color-black;
        .id {
            background-color: antiquewhite;
        }
    }

    .question {
        i {
            color: $color-black;
        }
    }

    .nav-item.dropdown {
        a:after{
            color: $color-black;
        }

        i {
            color: $color-black;
        }
    }

    .form-inline {
        width: 40%;
        margin-left: 8%;

        input {
            border-radius: 20px;
            padding-left: 30px;
            width: 100%;
        }

        .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: black;
        }
    }

</style>
