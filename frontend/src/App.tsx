import {
  Box,
  ChakraProvider,
  Container,
  Flex,
  Heading,
  HStack,
  Spacer,
} from "@chakra-ui/react";
import { useEffect, useState } from "react";
import { IProject } from "./@types/project";
import ListProjects from "./Components/ListProjects";
import ProjectsService from "./Services/ProjectsService";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination } from "swiper";

import "swiper/css";
import "swiper/css/pagination";
import "./Utils/styles/swiper.css";

function App() {
  const [projects, setProjects] = useState<IProject[]>([]);

  const fetchProjects = async () => {
    try {
      const response = await ProjectsService.fetchAll();
      console.log(response.data.data);
      setProjects(response.data.data);
    } catch (error: any) {
      console.log(error.message);
    }
  };
  useEffect(() => {
    fetchProjects();
  }, []);

  return (
    <ChakraProvider>
      <Flex
        minWidth="full"
        minHeight="100vh"
        justifyContent="center"
        alignItems="center"
        direction="column"
      >
        <Container minWidth="full" maxHeight="600px">
          <Heading size="md" mb="3">
            Ver outros Projetos do Proponente
          </Heading>

          <Swiper
            slidesPerView={4}
            spaceBetween={30}
            navigation={true}
            grabCursor={true}
            pagination={{
              clickable: true,
            }}
            modules={[Pagination, Navigation]}
            className="mySwiper"
          >
            {projects.map((project, index) => (
              <SwiperSlide key={index}>
                <ListProjects project={project} />
              </SwiperSlide>
            ))}
          </Swiper>
        </Container>
      </Flex>
    </ChakraProvider>
  );
}

export default App;
