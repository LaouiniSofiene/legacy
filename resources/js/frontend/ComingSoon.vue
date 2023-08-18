<template lang="">
    <div>
        <div style="display: flex;justify-content: center;">
            <img width="200" style="width: 200px;margin-top: 20px;" src="/img/legacy-ventures-logo.png"  alt="Legacy Ventures Malta">
        </div>
        <div class="wrapper">
            <h1>We are currently under construction<span class="dot">.</span></h1>
            <br><br>
            <div class="icons">
                <a href="https://www.facebook.com/legacyventuresmalta"><i class="fa fa-facebook" style="padding: 13px 16px;"></i></a>
                <a href="https://instagram.com/legacyventuresmalta?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
     name: "ComingSoon",
}
</script>
<style scoped>
    @keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}

}

@-webkit-keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}

}

.wrapper {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  animation: fadeIn 1000ms ease;
  -webkit-animation: fadeIn 1000ms ease;

}

h1 {
  font-size: 50px;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 0;
  line-height: 1;
  font-weight: 700;
}

.dot {
  color: #4FEBFE;
}

p {
  text-align: center;
  margin: 18px;
  font-family: 'Muli', sans-serif;
  font-weight: normal;

}

.icons {
  text-align: center;

}

.icons i {
  color: #00091B;
  background: #fff;

  padding: 13px;
  margin: 0 10px;
  border-radius: 50px;
  border: 2px solid #fff;
  transition: all 200ms ease;
  text-decoration: none;
  position: relative;
}

.icons i:hover, .icons i:active {
  color: #fff;
  background: none;
  cursor: pointer !important;
  transform: scale(1.2);
  -webkit-transform: scale(1.2);
  text-decoration: none;

}
</style>
