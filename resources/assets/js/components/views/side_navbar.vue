<template>
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start active open">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start active open">
                            <a href="index.html" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Dashboard 1</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="dashboard_2.html" class="nav-link ">
                                <i class="icon-bulb"></i>
                                <span class="title">Dashboard 2</span>
                                <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="dashboard_3.html" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Dashboard 3</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li  v-for="main_menu in main_menus"  class="nav-item ">               
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i v-bind:class="main_menu.icon"></i>
                        <span class="title">   {{ main_menu.nama }}</span>
                        <span class="arrow"></span>
                    </a>                
                    <ul  class="sub-menu" >
                        <li v-for="item_menu_sub_1 in main_menu.menu_sub_1" class="nav-item">
                            <a v-bind:href="item_menu_sub_1.route" class="nav-link ">
                                <span class="title"> {{item_menu_sub_1.nama}} </span>
                            </a>
                        </li>
                    </ul>                        
                </li>                                                                         
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                main_menus: []
            }
        },
        created: function () {
            this.getSideBar();
        },
        methods: {
            getSideBar: function () {
                axios.get('/side_bar/GetMenuMain')
                    .then(response => this.main_menus = response.data)
                    .catch(error => console.log(error.response.data));
            }
           
        }     
    }
</script>
