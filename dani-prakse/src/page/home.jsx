import { Fragment } from "react";
import Footer from "../component/layout/footer";
import Header from "../component/layout/header";
import About from "../component/section/about";
import Banner from "../component/section/banner";
import Category from "../component/section/category";
import Student from "../component/section/student";
import Logoi from "../component/section/logoi";
import AchievementThree from "../component/section/achievement-3";
import CountDown from "../component/sidebar/countdown";

const Home = () => {
    return (
        <Fragment>
            <Header />
            <Banner />
            <Logoi />
            <About />
            <CountDown />
            <Category />
            <Student />
            <AchievementThree />
            <Footer />
        </Fragment>
    );
}
 
export default Home;