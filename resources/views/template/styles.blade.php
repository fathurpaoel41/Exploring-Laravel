<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 250px;
        z-index: 1000;
        transition: all 0.3s;
    }
    .sidebar.collapsed {
        margin-left: -250px;
    }
    .content {
        margin-left: 250px;
        flex: 1;
        display: flex;
        flex-direction: column;
        transition: all 0.3s;
    }
    .content.expanded {
        margin-left: 0;
    }
    main {
        flex: 1;
    }
</style>