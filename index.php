<?php include 'includes/header.php'; ?>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    @keyframes pulse-glow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delayed {
        animation: float 6s ease-in-out 3s infinite;
    }
    .blob {
        position: absolute;
        filter: blur(80px);
        z-index: -1;
        opacity: 0.4;
        animation: pulse-glow 10s infinite;
    }
</style>

<?php include 'includes/hero.php'; ?>

<?php include 'includes/techstack.php'; ?>
<?php include 'includes/services.php'; ?>
<?php include 'includes/service2.php'; ?>
<?php include 'includes/work.php'; ?>
<?php include 'includes/projects.php'; ?>
<?php include 'includes/contact.php'; ?>











<?php include 'includes/footer.php'; ?>